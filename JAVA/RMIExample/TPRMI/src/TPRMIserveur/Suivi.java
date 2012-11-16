package TPRMIserveur;

import java.io.Serializable;


public class Suivi implements Serializable{
	private String suivi;
	private String date;
	public Suivi(String da,String str)
	{
		suivi=str;
		date=da;
	}
	public Suivi()
	{
		suivi="";
		date="";
	}
	
	
	//getters
	public String getContenu()
	{
		return suivi;
	}
	
	public String getDate()
	{
		return date;
	}
	
	//setters
	public void setContenu(String str)
	{
		suivi=str;
	}
	
	public void setDate(String dat)
	{
		date=dat;
	}
	

}
