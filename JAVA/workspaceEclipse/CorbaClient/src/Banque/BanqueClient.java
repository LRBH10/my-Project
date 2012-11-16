package Banque;

import org.omg.CORBA.ORB;
import org.omg.CosNaming.NamingContextExt;
import org.omg.CosNaming.NamingContextExtHelper;

import BanqueAppClient.ClientBanque;
import BanqueAppClient.ClientBanqueHelper;



public class BanqueClient {
	static ClientBanque banque;
	private String nomClient;

	public BanqueClient(String args[], String NomClient) {
		setNomClient(NomClient);
		try {
			// create and initialize the ORB
			ORB orb = ORB.init(args, null);

			// get the root naming context
			org.omg.CORBA.Object objRef = orb.resolve_initial_references("NameService");
			// Use NamingContextExt instead of NamingContext. This is
			// part of the Interoperable naming Service.
			NamingContextExt ncRef = NamingContextExtHelper.narrow(objRef);

			// resolve the Object Reference in Naming
			String name = "Banque";
			banque = ClientBanqueHelper.narrow(ncRef.resolve_str(name));

			System.out.println("Obtained a handle on server object: " + banque);

		} catch (Exception e) {
			System.out.println("ERROR : " + e);
			e.printStackTrace(System.out);
		}
	}

	/**
	 * GESTION DE NOM
	 */
	public String getNomClient() {
		return nomClient;
	}

	public void setNomClient(String nomClient) {
		this.nomClient = nomClient;
	}

	/**
	 * Consulter Solde
	 */
	public double getSolde() {
		return banque.consulter(this.nomClient);
	}
	
	/**
	 * Deposer Argent
	 */
	public boolean addMoney(double howmach){
		return banque.credit(this.nomClient, howmach);
	}
	
	/**
	 * Retirer Argent
	 */
	public boolean getMoney(double howmach){
		return banque.debit(this.nomClient, howmach);
	}

}