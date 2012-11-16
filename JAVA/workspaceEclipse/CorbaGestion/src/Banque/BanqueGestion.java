package Banque;

import org.omg.CORBA.ORB;
import org.omg.CosNaming.NamingContextExt;
import org.omg.CosNaming.NamingContextExtHelper;

import Shared.Compte;

import BanqueAppGestion.GestionBanque;
import BanqueAppGestion.GestionBanqueHelper;
import BanqueAppServer.BanqueHelper;

;

public class BanqueGestion {
	static GestionBanque banque;
	private String nomGestion;

	public BanqueGestion(String args[], String NomClient) {
		setNomGestion(NomClient);
		try {
			// create and initialize the ORB
			ORB orb = ORB.init(args, null);

			// get the root naming context
			org.omg.CORBA.Object objRef = orb
					.resolve_initial_references("NameService");
			// Use NamingContextExt instead of NamingContext. This is
			// part of the Interoperable naming Service.
			NamingContextExt ncRef = NamingContextExtHelper.narrow(objRef);

			// resolve the Object Reference in Naming
			String name = "Banque";
			banque = GestionBanqueHelper.narrow(ncRef.resolve_str(name));

			System.out.println("Obtained a handle on server object: " + banque);

		} catch (Exception e) {
			System.out.println("ERROR : " + e);
			e.printStackTrace(System.out);
		}
	}

	/**
	 * GESTION DE NOM
	 */
	public String getNomGestion() {
		return nomGestion;
	}

	public void setNomGestion(String nomClient) {
		this.nomGestion = nomClient;
	}

	/**
	 * Ajouter un Compte
	 */
	public void addCompte(String nomPro, double montantInitial) {
		banque.addCompte(nomPro, montantInitial);
	}
	
	/**
	 * Recuperer un Compte 
	 */
	public Compte getCompteInfo(String nomPro){
		return banque.getCompteInfoByName(nomPro);
	}
	
	

}