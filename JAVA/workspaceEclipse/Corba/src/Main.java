import java.io.IOException;


public class Main {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		try {
			Runtime runtime = Runtime.getRuntime();
			String[] argv = { "cmd.exe", "/C", "start orbd -ORBInitialPort 1050 -ORBInitialHost localhost" };
			final Process process = runtime.exec(argv);
			
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
