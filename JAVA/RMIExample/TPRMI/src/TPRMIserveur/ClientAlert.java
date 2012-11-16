/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package TPRMIserveur;

import java.rmi.Remote;
import java.rmi.RemoteException;

/**
 *
 * @author BIBOUH
 */
public interface ClientAlert extends Remote{
    void recive(String str) throws RemoteException;
    
}
