package Banque;

import java.util.ArrayList;

import org.omg.CORBA.ORB;

import Shared.Compte;

import BanqueAppServer.BanquePOA;

class BanqueImpl extends BanquePOA {
	ArrayList<Compte> comptes = new ArrayList<>();

	public BanqueImpl() {
		// TODO Auto-generated constructor stub
		super();
		initComptes();
	}

	private void initComptes() {
		// TODO Auto-generated method stub
		comptes.add(new Compte("rabah", 2000));
		comptes.add(new Compte("julian", 1000));
		comptes.add(new Compte("sparw", 10000));
	}

	@Override
	public boolean credit(String nomPro, double argent) {
		// TODO Auto-generated method stub
		int res = haveCompte(nomPro);
		if (res != -1) {
			comptes.get(res).solde += argent;
			return true;
		}
		return false;
	}

	@Override
	public boolean debit(String nomPro, double argent) {
		// TODO Auto-generated method stub
		int res = haveCompte(nomPro);
		if (res != -1) {
			comptes.get(res).solde -= argent;
			return true;
		}

		return false;
	}

	@Override
	public double consulter(String nomPro) {
		// TODO Auto-generated method stub
		int res = haveCompte(nomPro);
		if (res != -1)
			return comptes.get(res).solde;
		else
			return -1;

	}

	@Override
	public Compte[] comptes() {
		// TODO Auto-generated method stub
		return (Compte[]) comptes.toArray();
	}

	@Override
	public void comptes(Compte[] newComptes) {
		// TODO Auto-generated method stub
		comptes.clear();
		for (int i = 0; i < newComptes.length; i++)
			comptes.add(newComptes[i]);
	}

	@Override
	public void addCompte(String nomPro, double montantInitial) {
		// TODO Auto-generated method stub
		comptes.add(new Compte(nomPro, montantInitial));

	}

	@Override
	public Compte getCompteInfoByName(String nomPro) {
		// TODO Auto-generated method stub
		int res = haveCompte(nomPro);
		if (res != -1)
			return comptes.get(res);
		else
			return null;
	}

	/*
	 * ADDED Functions
	 */
	int haveCompte(String nomPro) {
		for (int i = 0; i < comptes.size(); i++)
			if (nomPro.equals(comptes.get(i).nomPro))
				return i;
		return -1;
	}

	private ORB orb;

	public void setORB(ORB orb_val) {
		orb = orb_val;
	}

}
