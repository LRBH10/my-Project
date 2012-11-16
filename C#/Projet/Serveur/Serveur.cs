using System;
using System.Runtime.Remoting;
using System.Runtime.Remoting.Channels;
using System.Runtime.Remoting.Channels.Tcp;
using System.Runtime.Remoting.Channels.Http;

using RemotingPartagees;

namespace RemotingServer 
{
  public class ServerExcute
  {
      public static int Main(string [] args) 
      {
          
          BinaryServerFormatterSinkProvider provider = new BinaryServerFormatterSinkProvider();
          provider.TypeFilterLevel = System.Runtime.Serialization.Formatters.TypeFilterLevel.Full;
          System.Collections.IDictionary props = new System.Collections.Hashtable();
          props["port"] = 8089;
          TcpChannel chan = new TcpChannel(props, null, provider);
        
          //TcpChannel chan1 = new TcpChannel(8089);
          ChannelServices.RegisterChannel(chan, true);
          RemotingConfiguration.RegisterWellKnownServiceType(typeof(Bibio), "Bibio", WellKnownObjectMode.Singleton);
          System.Console.WriteLine("Appuyez sur <entre> pour sortir...");
          System.Console.ReadLine();
          return 0;
    }
  }
}