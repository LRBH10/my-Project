/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package Special;


import TPRMIserveur.Animals;
import TPRMIserveur.ClientAlert;
import java.io.Serializable;
import java.rmi.RemoteException;
import java.rmi.registry.LocateRegistry;
import java.rmi.registry.Registry;

    
/**
 * * @author BIBOUH
 */
public class ClientRMI implements Serializable,ClientAlert{
    //ATRIBUTE
    Animals stub;

    public ClientRMI() {
    }
    
    public void setStub(Animals ss) throws RemoteException{
        stub=ss;   
    }
    public Animals getStub()
    {
        return stub;
    }

    
     private void Afficher(String str) {
        System.out.println(str);
    }
    
    @Override
    public void recive(String str) throws RemoteException {
        Afficher(str);
    }
}
