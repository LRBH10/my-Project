/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package frame;

/**
 *
 * @author BIBOUH
 */
import java.applet.Applet;
import java.awt.Color;
import java.awt.Graphics; 
import java.awt.Graphics2D;
import java.awt.RenderingHints;
import javax.swing.JFrame;
import javax.swing.JPanel;

public class Draw extends JPanel {
    @Override
/** Demonstrate basic AWT drawing with Graphics. **/
public void paintComponent(Graphics g) {
        super.paintComponent(g);
        Graphics2D g2d = (Graphics2D) g;
        g2d.setRenderingHint(
           RenderingHints.KEY_ANTIALIASING,                
           RenderingHints.VALUE_ANTIALIAS_ON);
        //set color to black
        g.setColor(Color.BLACK);
        //draw a rectangle
        //draw random circles
        g.drawOval(100, 100, 50, 50);
        g.drawString("N1", 100+25, 100+25);
        
    }
} // SimpleDraw1Applet