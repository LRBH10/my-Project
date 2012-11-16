package um2.webavancee.tests;

import um2.webavancee.utils.SDBUtil;

import com.hp.hpl.jena.sdb.store.StoreFactory;


public class Main {

	public static void main(String[] args) {
		StoreFactory.create(SDBUtil.getStoreDesc(), SDBUtil.getSDBConnection());
		
		
		
	}
}
