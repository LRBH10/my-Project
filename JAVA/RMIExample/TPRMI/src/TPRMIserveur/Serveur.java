package TPRMIserveur;

import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;
import com.sun.org.omg.SendingContext.CodeBase;
import java.lang.reflect.Constructor;
import java.rmi.RMISecurityManager;

import TPRMIserveur.AnimalImpl;

public class Serveur {

	public Serveur() {
        }


        
	public static void main(String args[]) {

		try {
 
                    if(System.getSecurityManager() == null)
                    System.setSecurityManager(new RMISecurityManager());
			AnimalImpl obj = new AnimalImpl();
                        
                        Registry registry = LocateRegistry.createRegistry(1099);
			//Registry registry = LocateRegistry.getRegistry();
			if (registry==null){
				System.err.println("RmiRegistry not found");
			}else{
				registry.bind("Animal", obj);
				System.err.println("Server ready");
			}
		} catch (Exception e) {
			//System.err.println("Server exception: " + e.toString());
			e.printStackTrace();
		}
	}
}