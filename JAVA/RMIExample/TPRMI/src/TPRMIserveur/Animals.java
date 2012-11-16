package TPRMIserveur;

import java.rmi.Remote;
import java.rmi.RemoteException;
import java.util.Vector;

public interface Animals extends Remote{
	
        Animal getAnimal(int index) throws RemoteException;
	void printDetail(int index) throws RemoteException;
	
        
        ///////*********************AJOUUUUUUUUUUUUUTES****************************/
        //pour Ajouter un Animal
	String addAnimal(String nom,String maitreNom,String espese, int dureeVieM)throws RemoteException;
	
        //AJOUTER UN SUIVI
        String addAnimalSuivi(int index, String nContenu) throws RemoteException;
        
        
        //////////////*****************GETTEEEEEEEEEEERS*****************************/
        //pour recuperer la list d'animals
        Vector<String> getListAnimals()throws RemoteException;
	
        //Recuperer la list de suivi d'un animals
        Vector<String> getListSuiviAnimal(int index) throws RemoteException;
        
        
        //pour Recuperer un Animal
	String getAnimalNom(int index)throws RemoteException;
	String getAnimalNomMaitre(int index)throws RemoteException;
	String getAnimalEspeceNom(int index)throws RemoteException;
	int getAnimalEspeceMoyenAge(int index)throws RemoteException;
        
        //Pour la gestion de suivi
        String getAnimalSuiviDate(int indexAnimal,int indexSuivi)throws RemoteException ;
        String getAnimalSuiviContenu(int indexAnimal,int indexSuivi)throws RemoteException ;
        
        
        
        
        /*******************************************SETTTTTTTTERS*****************/
        //Pour Modifier les paramtaitre
	String setAnimalNom(int index,String newNom)throws RemoteException;
	String setAnimalNomMaitre(int index,String newMaitre)throws RemoteException;
	
        //Pour la gestion de suivi
        String setAnimalSuiviContenu(int indexAnimal,int indexSuivi,String newContenu)throws RemoteException ;
        
        
        
        
        /**************SUPPRISSION**********************/
        //supprimer un Animal
        String deleteAnimal(int indexAnimal)throws RemoteException ;;
        
        //Suppreimer un suivi,
        String deleteAnimalSuivi(int indexAnimal,int indexSuivi)throws RemoteException ;
        
        //pour le nombre d'animal dans la base
	int getNombreAnimals() throws RemoteException;
        int getNombreEspeces() throws RemoteException;
        
        
        
        ///POUR LE TEST de 3
        String getDetailEspece(Espece es) throws RemoteException;
     
        //ALerts
        String alertClient(int idrgester) throws RemoteException ;
        
        //REGISTERER CLIENT
        int register() throws RemoteException;
     
       
}
