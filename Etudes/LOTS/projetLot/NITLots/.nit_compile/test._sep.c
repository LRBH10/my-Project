/* This C file is generated by NIT to compile module test. */
#include "test._sep.h"
static const char LOCATE_test___Sys___main[] = "test::Sys::(kernel::Sys::main)";
void test___Sys___main(val_t p0){
  struct {struct stack_frame_t me; val_t MORE_REG[5];} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_test;
  fra.me.line = 5;
  fra.me.meth = LOCATE_test___Sys___main;
  fra.me.has_broke = 0;
  fra.me.REG_size = 6;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[3] = NIT_NULL;
  fra.me.REG[4] = NIT_NULL;
  fra.me.REG[5] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* test.nit:5 */
  fra.me.REG[1] = NEW_Molecule_chimie___Molecule___init();
  /* test.nit:6 */
  fra.me.REG[2] = NEW_Molecule_chimie___Molecule___init();
  /* test.nit:14 */
  fra.me.REG[3] = NEW_Atome_chimie___Atome___init();
  /* test.nit:15 */
  fra.me.REG[4] = NEW_Atome_chimie___Atome___init();
  /* test.nit:16 */
  fra.me.REG[5] = NEW_Atome_chimie___Atome___init();
  /* test.nit:18 */
  CALL_general___Graphe___addSommet(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[3]);
  /* test.nit:19 */
  CALL_general___Graphe___addSommet(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[5]);
  /* test.nit:20 */
  CALL_general___Graphe___addSommet(fra.me.REG[2])(fra.me.REG[2], fra.me.REG[3]);
  /* test.nit:21 */
  CALL_general___Graphe___addSommet(fra.me.REG[2])(fra.me.REG[2], fra.me.REG[4]);
  /* test.nit:23 */
  fra.me.REG[4] = CALL_general___Graphe___sommets(fra.me.REG[1])(fra.me.REG[1]);
  CALL_standard___file___Object___print(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[4]);
  /* test.nit:24 */
  fra.me.REG[2] = CALL_general___Graphe___sommets(fra.me.REG[2])(fra.me.REG[2]);
  CALL_standard___file___Object___print(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[2]);
  /* test.nit:27 */
  fra.me.REG[2] = NEW_Liaison_chimie___Liaison___init();
  /* test.nit:28 */
  REGB0 = CALL_general___Aret___isEmpty(fra.me.REG[2])(fra.me.REG[2]);
  CALL_standard___file___Object___print(fra.me.REG[0])(fra.me.REG[0], REGB0);
  /* test.nit:29 */
  CALL_general___Graphe___addAret(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[2]);
  /* test.nit:30 */
  fra.me.REG[1] = CALL_general___Graphe___arets(fra.me.REG[1])(fra.me.REG[1]);
  CALL_standard___file___Object___print(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  stack_frame_head = fra.me.prev;
  return;
}
