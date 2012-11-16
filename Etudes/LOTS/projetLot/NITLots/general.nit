module general

abstract class Graphe
	type U : Aret   	
	type V : Sommet

	var arets : Array[U] =new Array[U]
	var sommets : Array[V] =new Array[V]

	fun addSommet(sommet: V)
	do
		if sommet.isGrapheNull then
			sommet.graphe = self
			sommets.add(sommet)
		end
	end

	fun addAret(aret: U)
	do
		if aret.isGrapheNull and not aret.isEmpty then
			aret.graphe = self
			arets.add(aret)
		end
	end
end

abstract class Aret
	type T : Graphe    	
	type V : Sommet 

	var graphe : nullable T 
	var sommet1 : nullable V 
	var sommet2 : nullable V 

	init
	do
		graphe =null
		sommet2 = null
		sommet1 =null	
	end


	fun addSommet(sot1: V, sot2: V)
	do
		if sot1.graphe == sot2.graphe and isEmpty then
			sommet1 = sot1
			sommet2 = sot2
		end
	end

	fun setGraphe(gra: T)
	do
		if isGrapheNull and gra == sommet1.graphe then
			graphe = gra
		end
	end

	fun isGrapheNull : Bool
	do
		return graphe == null
	end

	fun isEmpty : Bool
	do
		return sommet1 == null
	end

end

abstract class Sommet
	type T : Graphe   	
	type U : Aret

	var arets : Array[U] =new Array[U]
	var graphe : nullable T
	
	init
	do
		graphe =null
	end


	fun addAret(aret: U)
	do
			arets.add(aret)
	end

	fun setGraphe(gra: T)
	do
		if isGrapheNull then
			graphe = gra
		end
	end

	fun isGrapheNull : Bool
	do
		return graphe == null
	end
end
