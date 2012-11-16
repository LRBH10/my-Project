/*
 * File:   main.cpp
 * Author: Toula
 *
 * Created on 2 mai 2012, 21:39
 */
#include <stdio.h>
#include <pthread.h>
#include "listOfList.h"
#define NUM_THREADS     10
#define TAILLE_R 50
#define TAILLE_S 60

int R[TAILLE_R];
int S[TAILLE_S];

list2 *Ri;
list2 *Si;
list *Ti;

void *threadAlgo(void *threadid) {
	int tid;
	tid = (int) threadid;

	list *Rs=Nullptr(list);
	list2_get_list(&Rs,Ri,tid);

	list *Ss=Nullptr(list);
	list2_get_list(&Ss,Si,tid);


	printf("%d -> Ri : ",tid);
	list_affiche(Rs);

	printf("%d -> Si : ",tid);
	list_affiche(Ss);

	list *inter=Nullptr(list);
	list_intersection(&inter,Rs,Ss);

	printf("%d -> Ti : ",tid);
	list_affiche(inter);

	pthread_exit(inter);
}
/*
 *
 */
int main(int argc, char** argv) {

	Ri = 0;
	Si = 0;
	Ti=0;
	/* INITAILAISATION */
	int i;
	for (i = 0; i < TAILLE_R; i++)
		R[i] = 0;
	for (i = 0; i < TAILLE_S; i++)
		S[i] = 0;

	R[0] = 1;
	for (i = 1; i < TAILLE_R; i++)
		R[i] = R[i - 1] + 2;

	S[0] = 1;
	for (i = 1; i < TAILLE_S; i++)
		if (i % 2 == 1)
			S[i] = S[i - 1] + 1;
		else
			S[i] = S[i - 1] + 3;

	printf("\nS : ");
	for (i = 0; i < TAILLE_S; i++)
		printf("%d ", S[i]);
	printf("\nR : ");
	for (i = 0; i < TAILLE_R; i++)
		printf("%d ", R[i]);

	printf("\n\n");

	for(i=0;i<10;i++)
		list2_insert(&Ri,i,Nullptr(list2));

	for (i = 0; i < TAILLE_R; i++) {
		int r = R[i];
		int index = r % 10;
		list2_insert_fils(&Ri, index, r);
	}


	for(i=0;i<10;i++)
			list2_insert(&Si,i,Nullptr(list2));

	for (i = 0; i < TAILLE_S; i++) {
		int s = S[i];
		int index = s % 10;
		list2_insert_fils(&Si, index, s);
	}

	printf("LES Ri generer\n");
	list2_affiche(Ri);
	printf("LES Si generer\n");
	list2_affiche(Si);



	pthread_t threads[NUM_THREADS];
	int rc;
	int t;
	for (t = 0; t < NUM_THREADS; t++) {
		//printf("In main: creating thread %ld\n", t);
		rc = pthread_create(&threads[t], NULL, threadAlgo, (void *) t);
		if (rc) {
			printf("ERROR; return code from pthread_create() is %d\n", rc);
			exit(-1);
		}
	}

	for (t = 0; t < NUM_THREADS; t++)
	{
		list *returnedResult;
		pthread_join(threads[t],&returnedResult);
		list_union(&Ti,returnedResult);
	}

	printf("Result Final T : ");
 	list_affiche(Ti);
	/* Last thing that main() should do */
	pthread_exit(NULL);
	return 0;
}
