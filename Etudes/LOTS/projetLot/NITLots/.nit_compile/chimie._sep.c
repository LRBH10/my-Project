/* This C file is generated by NIT to compile module chimie. */
#include "chimie._sep.h"
static const char LOCATE_chimie___Molecule___init[] = "chimie::Molecule::init";
void chimie___Molecule___init(val_t p0, int* init_table){
  int itpos0 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_chimie___Molecule].i;
  struct {struct stack_frame_t me; val_t MORE_REG[2];} fra;
  val_t REGB0;
  val_t tmp;
  static val_t once_value_1; /* Once value */
  if (init_table[itpos0]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_chimie;
  fra.me.line = 9;
  fra.me.meth = LOCATE_chimie___Molecule___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 3;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* chimie.nit:9 */
  fra.me.REG[1] = fra.me.REG[0];
  CALL_general___Graphe___init(fra.me.REG[0])(fra.me.REG[0], init_table);
  /* chimie.nit:11 */
  if (!once_value_1) {
    fra.me.REG[0] = BOX_NativeString("appel de Construct Molecule");
    REGB0 = TAG_Int(27);
    fra.me.REG[0] = NEW_String_standard___string___String___with_native(fra.me.REG[0], REGB0);
    once_value_1 = fra.me.REG[0];
    register_static_object(&once_value_1);
  } else fra.me.REG[0] = once_value_1;
  fra.me.REG[0] = fra.me.REG[0];
  fra.me.REG[2] = CALL_standard___string___Object___to_s(fra.me.REG[1])(fra.me.REG[1]);
  fra.me.REG[2] = CALL_standard___string___String_____plus(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[2]);
  CALL_standard___file___Object___print(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[2]);
  stack_frame_head = fra.me.prev;
  init_table[itpos0] = 1;
  return;
}
static const char LOCATE_chimie___Liaison___init[] = "chimie::Liaison::init";
void chimie___Liaison___init(val_t p0, int* init_table){
  int itpos1 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_chimie___Liaison].i;
  struct {struct stack_frame_t me; val_t MORE_REG[2];} fra;
  val_t REGB0;
  val_t tmp;
  static val_t once_value_1; /* Once value */
  if (init_table[itpos1]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_chimie;
  fra.me.line = 21;
  fra.me.meth = LOCATE_chimie___Liaison___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 3;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* chimie.nit:21 */
  fra.me.REG[1] = fra.me.REG[0];
  CALL_general___Aret___init(fra.me.REG[0])(fra.me.REG[0], init_table);
  /* chimie.nit:23 */
  if (!once_value_1) {
    fra.me.REG[0] = BOX_NativeString("appel de Construct Liaison");
    REGB0 = TAG_Int(26);
    fra.me.REG[0] = NEW_String_standard___string___String___with_native(fra.me.REG[0], REGB0);
    once_value_1 = fra.me.REG[0];
    register_static_object(&once_value_1);
  } else fra.me.REG[0] = once_value_1;
  fra.me.REG[0] = fra.me.REG[0];
  fra.me.REG[2] = CALL_standard___string___Object___to_s(fra.me.REG[1])(fra.me.REG[1]);
  fra.me.REG[2] = CALL_standard___string___String_____plus(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[2]);
  CALL_standard___file___Object___print(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[2]);
  stack_frame_head = fra.me.prev;
  init_table[itpos1] = 1;
  return;
}
static const char LOCATE_chimie___Atome___init[] = "chimie::Atome::init";
void chimie___Atome___init(val_t p0, int* init_table){
  int itpos2 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_chimie___Atome].i;
  struct {struct stack_frame_t me; val_t MORE_REG[2];} fra;
  val_t REGB0;
  val_t tmp;
  static val_t once_value_1; /* Once value */
  if (init_table[itpos2]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_chimie;
  fra.me.line = 33;
  fra.me.meth = LOCATE_chimie___Atome___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 3;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* chimie.nit:33 */
  fra.me.REG[1] = fra.me.REG[0];
  CALL_general___Sommet___init(fra.me.REG[0])(fra.me.REG[0], init_table);
  /* chimie.nit:35 */
  if (!once_value_1) {
    fra.me.REG[0] = BOX_NativeString("appel de Construct Atome");
    REGB0 = TAG_Int(24);
    fra.me.REG[0] = NEW_String_standard___string___String___with_native(fra.me.REG[0], REGB0);
    once_value_1 = fra.me.REG[0];
    register_static_object(&once_value_1);
  } else fra.me.REG[0] = once_value_1;
  fra.me.REG[0] = fra.me.REG[0];
  fra.me.REG[2] = CALL_standard___string___Object___to_s(fra.me.REG[1])(fra.me.REG[1]);
  fra.me.REG[2] = CALL_standard___string___String_____plus(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[2]);
  CALL_standard___file___Object___print(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[2]);
  stack_frame_head = fra.me.prev;
  init_table[itpos2] = 1;
  return;
}
