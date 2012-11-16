import java.io.IOException;


public class Banque {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try {
			Runtime runtime = Runtime.getRuntime();
			String[] argv = { "cmd.exe", "/C", "idlj -fall banque.idl" };
			final Process process = runtime.exec(argv);
			
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}


	}

}
