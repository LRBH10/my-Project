package TPRMIserveur;

import java.rmi.RemoteException;
import java.rmi.server.UnicastRemoteObject;
import java.util.Date;
import java.util.LinkedList;
import java.util.List;
import java.util.Vector;
import javax.swing.JOptionPane;

public class AnimalImpl  extends UnicastRemoteObject  implements Animals {

    //attribut
    Vector<Animal> animals;
    Vector<Espece> especes;
    Vector<Boolean> clients;
    String alert="";
    int [] alerts={2, 5, 7};
    
    //COnstructure
    public AnimalImpl() throws RemoteException {
        animals=new Vector<Animal>();
        especes=new Vector<Espece>();
        clients=new Vector<Boolean>();
        init_espece();
        init_animals();
    }

    
    //REcuperer la list des animaux
    @Override
    public Vector<String> getListAnimals() throws RemoteException {
        Vector<String> lst=new Vector<>();
        for (Animal ele : animals) {
            lst.add(ele.getNom());
        }
        return lst;
    }

    @Override
    public Animal getAnimal(int index) throws RemoteException {
        if(index < 0 || index>=animals.size())
        {
            JOptionPane.showMessageDialog(null, "INDEX ERRONNEE");
            throw new UnsupportedOperationException("Not supported yet.");
        }
        else return animals.get(index); 
    }

    @Override
    public void printDetail(int index) throws RemoteException {
        throw new UnsupportedOperationException("Not supported yet.");
    }

    @Override
    public String addAnimal(String nom,String maitreNom,String espese, int dureeVieM) throws RemoteException {
        String ret="";
        
        Espece es=new Espece(espese, dureeVieM);
        
        if(!especes.contains(es)){
            ret="Ajoute d'une nouvelle espece\n";
            especes.add(es);
        }
        Animal animal=new Animal(nom,maitreNom, es);
        
        animals.add(animal);
        ret="Ajouter avec Succes";
        
        for(int ele:alerts)
                if(animals.size()==ele) alertClients(animals.size(),"HAUSSE");
        
        return ret;
    }

    //**************POUR LES TAILLES DES TABLEAU**************/
    @Override
    public int getNombreAnimals() throws RemoteException {
        return animals.size();
    }

    @Override
    public int getNombreEspeces() throws RemoteException {
        return especes.size();
    }


    
    //initialistaion des especes etdes animaux
    private void init_espece() {
        especes.add(new Espece("Chien", 12));
        especes.add(new Espece("Chat", 10));
        especes.add(new Espece("Panda", 7));
    }

    private void init_animals() {
        animals.add(new Animal("moumou", "Ema", especes.get(2)));
        animals.add(new Animal("Fox", "Rabah", especes.get(0)));
        animals.add(new Animal("JoJo", "Claudine", especes.get(1)));
    }

    
    
    //RECUPERE les SUIVI d'un Animal
    @Override
    public Vector<String> getListSuiviAnimal(int index) throws RemoteException {
        if(index < 0 || index>=animals.size())
        {
            JOptionPane.showMessageDialog(null, "INDEX ERRONNEE");
            throw new UnsupportedOperationException("Not supported yet.");
        }
        else 
        {
            Animal an=animals.get(index);
            Vector<String> lst=new Vector<>();
            for(int i=0;i<an.sizeSuivi();i++) lst.add(an.getSuivi(i).getDate());
            return lst;    
        }
    }

    @Override
    public String getAnimalNom(int index) throws RemoteException {
        if(index < 0 || index>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
        else return animals.get(index).getNom(); 
    }

    @Override
    public String getAnimalNomMaitre(int index) throws RemoteException {
      if(index < 0 || index>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
        else return animals.get(index).getNomMaitre(); 
    }

    @Override
    public String getAnimalEspeceNom(int index) throws RemoteException {
      if(index < 0 || index>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
      else return animals.get(index).getNomEspece().getName(); 
    }

    @Override
    public int getAnimalEspeceMoyenAge(int index) throws RemoteException {
     if(index < 0 || index>=animals.size())
            return -1;
      else return animals.get(index).getNomEspece().getDureeVieMoyenne(); 
    }

    @Override
    public String getAnimalSuiviDate(int indexAnimal, int indexSuivi) throws RemoteException {
         if(indexAnimal < 0 || indexAnimal>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
         else  if(indexSuivi < 0 || indexSuivi>=animals.get(indexAnimal).sizeSuivi())
            return "Le Suivi de cette Animal Qui vous Chercher n'existe pas";
         else return animals.get(indexAnimal).getSuivi(indexSuivi).getDate(); 
    }

    @Override
    public String getAnimalSuiviContenu(int indexAnimal, int indexSuivi) throws RemoteException {
        if(indexAnimal < 0 || indexAnimal>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
        else  if(indexSuivi < 0 || indexSuivi>=animals.get(indexAnimal).sizeSuivi())
            return "Le Suivi de cette Animal Qui vous Chercher n'existe pas";
        else {
            String str=animals.get(indexAnimal).getSuivi(indexSuivi).getContenu();
            return str;
        } 
    }

    @Override
    public String setAnimalNom(int index, String newNom) throws RemoteException {
        animals.get(index).setNom(newNom);
        return "Modification OK.";
    }

    @Override
    public String setAnimalNomMaitre(int index, String newMaitre) throws RemoteException {
        animals.get(index).setNomMaitre(newMaitre);
        return "Modification OK.";
    }

    @Override
    public String setAnimalSuiviContenu(int indexAnimal, int indexSuivi,String newContenu) throws RemoteException {
        animals.get(indexAnimal).getSuivi(indexSuivi).setDate(getDateNow());
        animals.get(indexAnimal).getSuivi(indexSuivi).setContenu(newContenu);
        return "Modification de Suivi OK.";
    }

    private String getDateNow() {
        Date s=new Date(new Date().getTime());
        String str="";
        str+=s.getDate()+"-";
        str+=s.getMonth()+"-";
        str+=s.getYear()+"- (";
        str+=s.getHours()+":";
        str+=s.getMinutes()+")";
        return str;
    }

    @Override
    public String addAnimalSuivi(int index, String nContenu) throws RemoteException {
        Suivi inter=new Suivi(getDateNow(), nContenu);
        animals.get(index).addSuivi(inter);
        
        return "Ajoute de Suivi OK.";
    }

    @Override
    public String deleteAnimal(int indexAnimal) throws RemoteException {
        if(indexAnimal < 0 || indexAnimal>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
        else{
             animals.remove(indexAnimal);
             for(int ele:alerts)
                if(animals.size()==ele) alertClients(animals.size(),"BASSE");
    
            return "Suppresion de l'animal OK";   
        }
    }

    @Override
    public String deleteAnimalSuivi(int indexAnimal, int indexSuivi) throws RemoteException {
        if(indexAnimal < 0 || indexAnimal>=animals.size())
            return "L'Animal Qui vous Chercher n'existe pas";
        else{
             animals.get(indexAnimal).deleteSuivi(indexSuivi);
            return "Suppresion de Suivi d'animal OK";   
        }
     }

    @Override
    public String getDetailEspece(Espece es) throws RemoteException {
        System.out.println(es);
        return es.toString();
    }

    @Override
    public int register() throws RemoteException {
        clients.add(Boolean.TRUE);
        System.out.println("Creation Ok");
        return clients.size()-1;
    }

    public String alertClients(int size, String what) throws RemoteException {
         alert=what+" "+size;
         System.out.println(alert);
         for(int i=0;i<clients.size();i++)
         {
             clients.set(i,Boolean.FALSE);
         }
         
         return alert;
    }

    @Override
    public String alertClient(int idregister) throws RemoteException {
        if(!clients.get(idregister).booleanValue())
        {
            System.out.println("client "+idregister+" arecu l'alret");
                 
            clients.set(idregister, Boolean.TRUE);
            return alert +" "+ getDateNow();
        }
        else return "";
    }
}


