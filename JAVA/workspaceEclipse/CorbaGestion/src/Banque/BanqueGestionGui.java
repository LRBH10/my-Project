package Banque;

import java.awt.BorderLayout;
import java.awt.EventQueue;

import javax.swing.JFrame;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;

import Shared.Compte;


public class BanqueGestionGui extends JFrame {

	private JPanel contentPane;
	public BanqueGestion stubBanque;

	/**
	 * Launch the application.
	 */
	public static void main(final String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					BanqueGestionGui frame = new BanqueGestionGui(args);
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}

	/**
	 * Create the frame.
	 */
	public BanqueGestionGui(String[] args) {
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		stubBanque = new BanqueGestion(args,"");
		stubBanque.addCompte("todo", 5000);
		Compte s=stubBanque.getCompteInfo("todo");
		System.out.println(s.nomPro + " "+ s.solde);
		
		setBounds(100, 100, 450, 300);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		contentPane.setLayout(new BorderLayout(0, 0));
		setContentPane(contentPane);
	}
	
	
	 

}
