/* This C file is generated by NIT to compile module general. */
#include "general._sep.h"
static const char LOCATE_general___Graphe___arets[] = "general::Graphe::arets";
val_t general___Graphe___arets(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 7;
  fra.me.meth = LOCATE_general___Graphe___arets;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:7 */
  REGB0 = TAG_Bool(ATTR_general___Graphe_____atarets(fra.me.REG[0])!=NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Uninitialized attribute %s", "@arets", LOCATE_general, 7);
  }
  fra.me.REG[0] = ATTR_general___Graphe_____atarets(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Graphe___arets__eq[] = "general::Graphe::arets=";
void general___Graphe___arets__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 7;
  fra.me.meth = LOCATE_general___Graphe___arets__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:7 */
  ATTR_general___Graphe_____atarets(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Graphe___sommets[] = "general::Graphe::sommets";
val_t general___Graphe___sommets(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 8;
  fra.me.meth = LOCATE_general___Graphe___sommets;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:8 */
  REGB0 = TAG_Bool(ATTR_general___Graphe_____atsommets(fra.me.REG[0])!=NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Uninitialized attribute %s", "@sommets", LOCATE_general, 8);
  }
  fra.me.REG[0] = ATTR_general___Graphe_____atsommets(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Graphe___sommets__eq[] = "general::Graphe::sommets=";
void general___Graphe___sommets__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 8;
  fra.me.meth = LOCATE_general___Graphe___sommets__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:8 */
  ATTR_general___Graphe_____atsommets(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Graphe___addSommet[] = "general::Graphe::addSommet";
void general___Graphe___addSommet(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 10;
  fra.me.meth = LOCATE_general___Graphe___addSommet;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Graphe___V(fra.me.REG[0]), VTID_general___Graphe___V(fra.me.REG[0]))) /*cast V*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:12 */
  REGB0 = CALL_general___Sommet___isGrapheNull(fra.me.REG[1])(fra.me.REG[1]);
  if (UNTAG_Bool(REGB0)) {
    /* general.nit:13 */
    CALL_general___Sommet___graphe__eq(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[0]);
    /* general.nit:14 */
    fra.me.REG[0] = CALL_general___Graphe___sommets(fra.me.REG[0])(fra.me.REG[0]);
    CALL_standard___collection___abstract_collection___SimpleCollection___add(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  }
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Graphe___addAret[] = "general::Graphe::addAret";
void general___Graphe___addAret(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 18;
  fra.me.meth = LOCATE_general___Graphe___addAret;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Graphe___U(fra.me.REG[0]), VTID_general___Graphe___U(fra.me.REG[0]))) /*cast U*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:20 */
  REGB0 = CALL_general___Aret___isGrapheNull(fra.me.REG[1])(fra.me.REG[1]);
  if (UNTAG_Bool(REGB0)) {
    REGB0 = CALL_general___Aret___isEmpty(fra.me.REG[1])(fra.me.REG[1]);
    REGB0 = TAG_Bool(!UNTAG_Bool(REGB0));
  } else {
    REGB1 = TAG_Bool(false);
    REGB0 = REGB1;
  }
  if (UNTAG_Bool(REGB0)) {
    /* general.nit:21 */
    CALL_general___Aret___graphe__eq(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[0]);
    /* general.nit:22 */
    fra.me.REG[0] = CALL_general___Graphe___arets(fra.me.REG[0])(fra.me.REG[0]);
    CALL_standard___collection___abstract_collection___SimpleCollection___add(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  }
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Graphe___init[] = "general::Graphe::init";
void general___Graphe___init(val_t p0, int* init_table){
  int itpos0 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_general___Graphe].i;
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  if (init_table[itpos0]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 0;
  fra.me.meth = LOCATE_general___Graphe___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 0;
  fra.me.nitni_local_ref_head = NULL;
  stack_frame_head = fra.me.prev;
  init_table[itpos0] = 1;
  return;
}
static const char LOCATE_general___Aret___graphe[] = "general::Aret::graphe";
val_t general___Aret___graphe(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 31;
  fra.me.meth = LOCATE_general___Aret___graphe;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:31 */
  fra.me.REG[0] = ATTR_general___Aret_____atgraphe(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Aret___graphe__eq[] = "general::Aret::graphe=";
void general___Aret___graphe__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 31;
  fra.me.meth = LOCATE_general___Aret___graphe__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:31 */
  ATTR_general___Aret_____atgraphe(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Aret___sommet1[] = "general::Aret::sommet1";
val_t general___Aret___sommet1(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 32;
  fra.me.meth = LOCATE_general___Aret___sommet1;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:32 */
  fra.me.REG[0] = ATTR_general___Aret_____atsommet1(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Aret___sommet1__eq[] = "general::Aret::sommet1=";
void general___Aret___sommet1__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 32;
  fra.me.meth = LOCATE_general___Aret___sommet1__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:32 */
  ATTR_general___Aret_____atsommet1(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Aret___sommet2[] = "general::Aret::sommet2";
val_t general___Aret___sommet2(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 33;
  fra.me.meth = LOCATE_general___Aret___sommet2;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:33 */
  fra.me.REG[0] = ATTR_general___Aret_____atsommet2(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Aret___sommet2__eq[] = "general::Aret::sommet2=";
void general___Aret___sommet2__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 33;
  fra.me.meth = LOCATE_general___Aret___sommet2__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:33 */
  ATTR_general___Aret_____atsommet2(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Aret___init[] = "general::Aret::init";
void general___Aret___init(val_t p0, int* init_table){
  int itpos1 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_general___Aret].i;
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  if (init_table[itpos1]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 35;
  fra.me.meth = LOCATE_general___Aret___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:37 */
  CALL_general___Aret___graphe__eq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
  /* general.nit:38 */
  CALL_general___Aret___sommet2__eq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
  /* general.nit:39 */
  CALL_general___Aret___sommet1__eq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
  stack_frame_head = fra.me.prev;
  init_table[itpos1] = 1;
  return;
}
static const char LOCATE_general___Aret___addSommet[] = "general::Aret::addSommet";
void general___Aret___addSommet(val_t p0, val_t p1, val_t p2){
  struct {struct stack_frame_t me; val_t MORE_REG[4];} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 43;
  fra.me.meth = LOCATE_general___Aret___addSommet;
  fra.me.has_broke = 0;
  fra.me.REG_size = 5;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[3] = NIT_NULL;
  fra.me.REG[4] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  fra.me.REG[2] = p2;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Aret___V(fra.me.REG[0]), VTID_general___Aret___V(fra.me.REG[0]))) /*cast V*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[2], VTCOLOR_general___Aret___V(fra.me.REG[0]), VTID_general___Aret___V(fra.me.REG[0]))) /*cast V*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:45 */
  fra.me.REG[3] = CALL_general___Sommet___graphe(fra.me.REG[1])(fra.me.REG[1]);
  fra.me.REG[4] = CALL_general___Sommet___graphe(fra.me.REG[2])(fra.me.REG[2]);
  REGB0 = TAG_Bool(IS_EQUAL_NN(fra.me.REG[3],fra.me.REG[4]));
  if (UNTAG_Bool(REGB0)) {
  } else {
    REGB1 = TAG_Bool(fra.me.REG[3]==NIT_NULL);
    if (UNTAG_Bool(REGB1)) {
      REGB1 = TAG_Bool(false);
      REGB0 = REGB1;
    } else {
      REGB1 = CALL_standard___kernel___Object_____eqeq(fra.me.REG[3])(fra.me.REG[3], fra.me.REG[4]);
      REGB0 = REGB1;
    }
  }
  if (UNTAG_Bool(REGB0)) {
    REGB0 = CALL_general___Aret___isEmpty(fra.me.REG[0])(fra.me.REG[0]);
  } else {
    REGB1 = TAG_Bool(false);
    REGB0 = REGB1;
  }
  if (UNTAG_Bool(REGB0)) {
    /* general.nit:46 */
    CALL_general___Aret___sommet1__eq(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
    /* general.nit:47 */
    CALL_general___Aret___sommet2__eq(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[2]);
  }
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Aret___setGraphe[] = "general::Aret::setGraphe";
void general___Aret___setGraphe(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[2];} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 51;
  fra.me.meth = LOCATE_general___Aret___setGraphe;
  fra.me.has_broke = 0;
  fra.me.REG_size = 3;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[2] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Aret___T(fra.me.REG[0]), VTID_general___Aret___T(fra.me.REG[0]))) /*cast T*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:53 */
  REGB0 = CALL_general___Aret___isGrapheNull(fra.me.REG[0])(fra.me.REG[0]);
  if (UNTAG_Bool(REGB0)) {
    fra.me.REG[2] = CALL_general___Aret___sommet1(fra.me.REG[0])(fra.me.REG[0]);
    REGB0 = TAG_Bool(fra.me.REG[2]==NIT_NULL);
    if (UNTAG_Bool(REGB0)) {
      nit_abort("Reciever is null", NULL, LOCATE_general, 53);
    }
    fra.me.REG[2] = CALL_general___Sommet___graphe(fra.me.REG[2])(fra.me.REG[2]);
    REGB0 = TAG_Bool(IS_EQUAL_ON(fra.me.REG[1],fra.me.REG[2]));
    if (UNTAG_Bool(REGB0)) {
    } else {
      REGB1 = CALL_standard___kernel___Object_____eqeq(fra.me.REG[1])(fra.me.REG[1], fra.me.REG[2]);
      REGB0 = REGB1;
    }
  } else {
    REGB1 = TAG_Bool(false);
    REGB0 = REGB1;
  }
  if (UNTAG_Bool(REGB0)) {
    /* general.nit:54 */
    CALL_general___Aret___graphe__eq(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  }
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Aret___isGrapheNull[] = "general::Aret::isGrapheNull";
val_t general___Aret___isGrapheNull(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 58;
  fra.me.meth = LOCATE_general___Aret___isGrapheNull;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:60 */
  fra.me.REG[0] = CALL_general___Aret___graphe(fra.me.REG[0])(fra.me.REG[0]);
  REGB0 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    REGB1 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
    if (UNTAG_Bool(REGB1)) {
      REGB1 = TAG_Bool(false);
      REGB0 = REGB1;
    } else {
      REGB1 = CALL_standard___kernel___Object_____eqeq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
      REGB0 = REGB1;
    }
  }
  goto label1;
  label1: while(0);
  stack_frame_head = fra.me.prev;
  return REGB0;
}
static const char LOCATE_general___Aret___isEmpty[] = "general::Aret::isEmpty";
val_t general___Aret___isEmpty(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 63;
  fra.me.meth = LOCATE_general___Aret___isEmpty;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:65 */
  fra.me.REG[0] = CALL_general___Aret___sommet1(fra.me.REG[0])(fra.me.REG[0]);
  REGB0 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    REGB1 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
    if (UNTAG_Bool(REGB1)) {
      REGB1 = TAG_Bool(false);
      REGB0 = REGB1;
    } else {
      REGB1 = CALL_standard___kernel___Object_____eqeq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
      REGB0 = REGB1;
    }
  }
  goto label1;
  label1: while(0);
  stack_frame_head = fra.me.prev;
  return REGB0;
}
static const char LOCATE_general___Sommet___arets[] = "general::Sommet::arets";
val_t general___Sommet___arets(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 74;
  fra.me.meth = LOCATE_general___Sommet___arets;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:74 */
  REGB0 = TAG_Bool(ATTR_general___Sommet_____atarets(fra.me.REG[0])!=NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Uninitialized attribute %s", "@arets", LOCATE_general, 74);
  }
  fra.me.REG[0] = ATTR_general___Sommet_____atarets(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Sommet___arets__eq[] = "general::Sommet::arets=";
void general___Sommet___arets__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 74;
  fra.me.meth = LOCATE_general___Sommet___arets__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:74 */
  ATTR_general___Sommet_____atarets(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Sommet___graphe[] = "general::Sommet::graphe";
val_t general___Sommet___graphe(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 75;
  fra.me.meth = LOCATE_general___Sommet___graphe;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:75 */
  fra.me.REG[0] = ATTR_general___Sommet_____atgraphe(fra.me.REG[0]);
  stack_frame_head = fra.me.prev;
  return fra.me.REG[0];
}
static const char LOCATE_general___Sommet___graphe__eq[] = "general::Sommet::graphe=";
void general___Sommet___graphe__eq(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 75;
  fra.me.meth = LOCATE_general___Sommet___graphe__eq;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  /* general.nit:75 */
  ATTR_general___Sommet_____atgraphe(fra.me.REG[0]) = fra.me.REG[1];
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Sommet___init[] = "general::Sommet::init";
void general___Sommet___init(val_t p0, int* init_table){
  int itpos2 = VAL2OBJ(p0)->vft[INIT_TABLE_POS_general___Sommet].i;
  struct {struct stack_frame_t me;} fra;
  val_t tmp;
  if (init_table[itpos2]) return;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 77;
  fra.me.meth = LOCATE_general___Sommet___init;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:79 */
  CALL_general___Sommet___graphe__eq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
  stack_frame_head = fra.me.prev;
  init_table[itpos2] = 1;
  return;
}
static const char LOCATE_general___Sommet___addAret[] = "general::Sommet::addAret";
void general___Sommet___addAret(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 83;
  fra.me.meth = LOCATE_general___Sommet___addAret;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Sommet___U(fra.me.REG[0]), VTID_general___Sommet___U(fra.me.REG[0]))) /*cast U*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:85 */
  fra.me.REG[0] = CALL_general___Sommet___arets(fra.me.REG[0])(fra.me.REG[0]);
  CALL_standard___collection___abstract_collection___SimpleCollection___add(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Sommet___setGraphe[] = "general::Sommet::setGraphe";
void general___Sommet___setGraphe(val_t p0, val_t p1){
  struct {struct stack_frame_t me; val_t MORE_REG[1];} fra;
  val_t REGB0;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 88;
  fra.me.meth = LOCATE_general___Sommet___setGraphe;
  fra.me.has_broke = 0;
  fra.me.REG_size = 2;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[1] = NIT_NULL;
  fra.me.REG[0] = p0;
  fra.me.REG[1] = p1;
  REGB0 = TAG_Bool(VAL_ISA(fra.me.REG[1], VTCOLOR_general___Sommet___T(fra.me.REG[0]), VTID_general___Sommet___T(fra.me.REG[0]))) /*cast T*/;
  if (UNTAG_Bool(REGB0)) {
  } else {
    nit_abort("Cast failed", NULL, LOCATE_general, 0);
  }
  /* general.nit:90 */
  REGB0 = CALL_general___Sommet___isGrapheNull(fra.me.REG[0])(fra.me.REG[0]);
  if (UNTAG_Bool(REGB0)) {
    /* general.nit:91 */
    CALL_general___Sommet___graphe__eq(fra.me.REG[0])(fra.me.REG[0], fra.me.REG[1]);
  }
  stack_frame_head = fra.me.prev;
  return;
}
static const char LOCATE_general___Sommet___isGrapheNull[] = "general::Sommet::isGrapheNull";
val_t general___Sommet___isGrapheNull(val_t p0){
  struct {struct stack_frame_t me;} fra;
  val_t REGB0;
  val_t REGB1;
  val_t tmp;
  fra.me.prev = stack_frame_head; stack_frame_head = &fra.me;
  fra.me.file = LOCATE_general;
  fra.me.line = 95;
  fra.me.meth = LOCATE_general___Sommet___isGrapheNull;
  fra.me.has_broke = 0;
  fra.me.REG_size = 1;
  fra.me.nitni_local_ref_head = NULL;
  fra.me.REG[0] = NIT_NULL;
  fra.me.REG[0] = p0;
  /* general.nit:97 */
  fra.me.REG[0] = CALL_general___Sommet___graphe(fra.me.REG[0])(fra.me.REG[0]);
  REGB0 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
  if (UNTAG_Bool(REGB0)) {
  } else {
    REGB1 = TAG_Bool(fra.me.REG[0]==NIT_NULL);
    if (UNTAG_Bool(REGB1)) {
      REGB1 = TAG_Bool(false);
      REGB0 = REGB1;
    } else {
      REGB1 = CALL_standard___kernel___Object_____eqeq(fra.me.REG[0])(fra.me.REG[0], NIT_NULL);
      REGB0 = REGB1;
    }
  }
  goto label1;
  label1: while(0);
  stack_frame_head = fra.me.prev;
  return REGB0;
}
