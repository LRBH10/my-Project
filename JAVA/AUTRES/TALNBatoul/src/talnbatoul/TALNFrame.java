/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
package talnbatoul;

import java.util.Dictionary;
import java.util.Vector;

/**
 *
 * @author BIBOUH
 */
public class TALNFrame extends javax.swing.JFrame {

    Vector<String> mots;
    Vector<String> etiquette;
    Vector<String> motesManquet;
    int indexMotManquant;
    /**
     * Creates new form TALNFrame
     */
    public TALNFrame() {
        initComponents();
        mots= new Vector<>();
        etiquette = new Vector<>();
        motesManquet = new Vector<>();
        indexMotManquant = 0;
        init_mots();
    }

    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jLabel1 = new javax.swing.JLabel();
        phrase = new javax.swing.JTextField();
        analyse = new javax.swing.JButton();
        mot = new javax.swing.JTextField();
        next = new javax.swing.JButton();
        addMoot = new javax.swing.JButton();
        etiq = new javax.swing.JTextField();
        jButton1 = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jLabel1.setText("la phrase");

        analyse.setText("Analyse");
        analyse.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                analyseActionPerformed(evt);
            }
        });

        mot.setEnabled(false);

        next.setText("Suivant");
        next.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                nextActionPerformed(evt);
            }
        });

        addMoot.setText("Ajouter");
        addMoot.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                addMootActionPerformed(evt);
            }
        });

        jButton1.setText("Afficher la base de donnees");
        jButton1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jButton1ActionPerformed(evt);
            }
        });

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addGap(44, 44, 44)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING, false)
                    .addComponent(jButton1, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                    .addGroup(layout.createSequentialGroup()
                        .addComponent(jLabel1, javax.swing.GroupLayout.PREFERRED_SIZE, 62, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(phrase, javax.swing.GroupLayout.PREFERRED_SIZE, 204, javax.swing.GroupLayout.PREFERRED_SIZE)
                        .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                        .addComponent(analyse))
                    .addGroup(layout.createSequentialGroup()
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.TRAILING)
                            .addComponent(mot, javax.swing.GroupLayout.PREFERRED_SIZE, 140, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(etiq, javax.swing.GroupLayout.PREFERRED_SIZE, 140, javax.swing.GroupLayout.PREFERRED_SIZE))
                        .addGap(18, 18, 18)
                        .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
                            .addComponent(addMoot, javax.swing.GroupLayout.PREFERRED_SIZE, 94, javax.swing.GroupLayout.PREFERRED_SIZE)
                            .addComponent(next, javax.swing.GroupLayout.PREFERRED_SIZE, 94, javax.swing.GroupLayout.PREFERRED_SIZE))))
                .addContainerGap(58, Short.MAX_VALUE))
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(layout.createSequentialGroup()
                .addContainerGap()
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(jLabel1)
                    .addComponent(phrase, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(analyse))
                .addGap(73, 73, 73)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(mot, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE)
                    .addComponent(next))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED)
                .addGroup(layout.createParallelGroup(javax.swing.GroupLayout.Alignment.BASELINE)
                    .addComponent(addMoot)
                    .addComponent(etiq, javax.swing.GroupLayout.PREFERRED_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.PREFERRED_SIZE))
                .addPreferredGap(javax.swing.LayoutStyle.ComponentPlacement.RELATED, 42, Short.MAX_VALUE)
                .addComponent(jButton1)
                .addGap(76, 76, 76))
        );

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void analyseActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_analyseActionPerformed
        // TODO add your handling code here:
        String []  lstStr= phrase.getText().split(" ");
        for(String ele:lstStr){
            if(mots.contains(ele))
                System.out.println(ele+"\t"+etiquette.get(mots.indexOf(ele)));
            else{
                System.out.println(ele+"\tpas dans la base");
                motesManquet.add(ele);
                updateMotAdd(motesManquet.size()-1);
            }
        }
        
    }//GEN-LAST:event_analyseActionPerformed

    private void nextActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_nextActionPerformed
        // TODO add your handling code here:
        if(!motesManquet.isEmpty()){
            indexMotManquant++;
            int x=indexMotManquant%motesManquet.size();
            updateMotAdd(x);
        }
        else{
            etiq.setText("");
            mot.setText("");
        }
        
    }//GEN-LAST:event_nextActionPerformed

    private void addMootActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_addMootActionPerformed
        // TODO add your handling code here:
        addMots(mot.getText(), etiq.getText());
        motesManquet.remove(mot.getText());
        if(motesManquet.size()>0)   updateMotAdd(motesManquet.size()-1);
        else    mot.setText("");    
        etiq.setText("");    
    }//GEN-LAST:event_addMootActionPerformed

    private void jButton1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jButton1ActionPerformed
        // TODO add your handling code here:
        System.out.println("*************************\n\tLA BASE");
        for(int i=0;i<mots.size();i++)
            System.out.println(mots.get(i)+"\t"+etiquette.get(i));
        System.out.println("*************************");
        
    }//GEN-LAST:event_jButton1ActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /*
         * Set the Nimbus look and feel
         */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /*
         * If Nimbus (introduced in Java SE 6) is not available, stay with the
         * default look and feel. For details see
         * http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(TALNFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(TALNFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(TALNFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(TALNFrame.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>
        new TALNFrame().setVisible(true);
            
        /*
         * Create and display the form
         */
    }
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton addMoot;
    private javax.swing.JButton analyse;
    private javax.swing.JTextField etiq;
    private javax.swing.JButton jButton1;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JTextField mot;
    private javax.swing.JButton next;
    private javax.swing.JTextField phrase;
    // End of variables declaration//GEN-END:variables

    
    private void init_mots() {
        addMots("la","HADJA");
        addMots("bien","ADVERBE");
    }

    private void addMots(String mot, String etiq) {
        if(!mot.isEmpty() && !etiq.isEmpty()){
            mots.add(mot);
            etiquette.add(etiq);                
        }
    }

    private void updateMotAdd(int i) {
        mot.setText(motesManquet.get(i));
        indexMotManquant=i;
    }
}