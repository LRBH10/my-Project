set ns [new Simulator]

$ns color 0 blue
$ns color 1 red
$ns color 2 black
$ns color 3 green

set n0 [$ns node]
set n1 [$ns node]


set f [open out.tr w]
$ns trace-all $f
set nf [open out.nam w]
$ns namtrace-all $nf

$ns duplex-link $n0 $n1 2Mb 20ms DropTail
$ns queue-limit $n0 $n1 100

#UDP
set udp0 [new Agent/UDP]
$ns attach-agent $n0 $udp0
$udp0 set class_ 3

set null0 [new Agent/Null]
$ns attach-agent $n1 $null0

$ns connect $udp0 $null0


#TCPS
set tcp0 [new Agent/TCP]
$ns attach-agent $n0 $tcp0
$tcp0 set class_ 0


set tcp1 [new Agent/TCP]
$ns attach-agent $n0 $tcp1
$tcp1 set class_ 1

set tcp2 [new Agent/TCP]
$ns attach-agent $n0 $tcp2
$tcp2 set class_ 2

set sink0 [new Agent/TCPSink]
$ns attach-agent $n1 $sink0

set sink1 [new Agent/TCPSink]
$ns attach-agent $n1 $sink1

set sink2 [new Agent/TCPSink]
$ns attach-agent $n1 $sink2

$ns connect $tcp0 $sink0
$ns connect $tcp1 $sink1
$ns connect $tcp2 $sink2


#applications
set cbr0 [new Application/Traffic/CBR]
$cbr0     set packetSize_ 625000
$cbr0 set interval_ 50ms
$cbr0 attach-agent $tcp0

set cbr1 [new Application/Traffic/CBR]
$cbr1 set packetSize_ 125000
$cbr1 set interval_ 100ms
$cbr1 attach-agent $tcp1

set cbr2 [new Application/Traffic/CBR]
$cbr2 set packetSize_ 1875000
$cbr2 set interval_ 150ms
$cbr2 attach-agent $tcp2

set cbr3 [new Application/Traffic/Exponential]
$cbr3 set rate_ 1.5Mb
$cbr3 set burst_time_ 10ms
$cbr3 set idle_time_ 5ms
$cbr3 attach-agent $udp0


$ns at 0.1 "$cbr0 start"
$ns at 0.1 "$cbr1 start"
$ns at 0.1 "$cbr2 start"
$ns at 0.1 "$cbr3 start"


$ns at 10.0 "finish"

$ns at 0.2 "tailleTcp"

#Statistiques
#TCP Fenaitre
set delaiTcp 0.05

proc tailleTcp {} {
	global ns delaiTcp tcp0 tcp1 tcp2
	set now [$ns now]
	set newAt [expr $now + $delaiTcp]  

#TAILLE des FENEAITRE
	puts "TCP 0 a l'instant $now [$tcp0 set cwnd_]"
	$ns at  $newAt "tailleTcp"
}
#FILE d'attent
set delaiFile 0.05
set tcpF0 [open tcp0.tr w]
set tcpF1 [open tcp1.tr w]
set tcpF2 [open tcp2.tr w]

proc tailleTcp {} {
	global ns delaiFile tcpF0 tcpF1 tcpF2 tcp0 tcp1 tcp2
	set now [$ns now]
	set newAt [expr $now + $delaiFile]  

#TAILLE des FENEAITRE
	puts $tcpF0  	"0 $now [$tcp0 set cwnd_]"
	puts $tcpF1 	"1 $now [$tcp1 set cwnd_]"
	puts $tcpF2 	"2 $now [$tcp2 set cwnd_]"
	$ns at  $newAt "tailleTcp"
}


proc finish {} {
    global ns f nf
    $ns flush-trace
    close $f
    close $nf

    puts "running nam..."
    exec nam out.nam &
    exit 0
}

$ns run
