/*
 * File:   main.cpp
 * Author: Toula
 *
 * Created on 2 mai 2012, 21:39
 */
#include <stdio.h>
#include <pthread.h>
#include "listOfList.h"


pthread_mutex_t mutex = PTHREAD_MUTEX_INITIALIZER;

#define NUM_THREADS     10
#define TAILLE_R 50
#define TAILLE_S 60

int R[TAILLE_R];
int S[TAILLE_S];

list *Ti;

void *threadAlgo(void *threadid) {
	int tid;
	int i;
	int borne;
	tid = (int) threadid;
	borne = tid * 10;
	list *Ri = 0;
	list *Si = 0;


	for (i = 0; i < TAILLE_R; i++) {
		int r = R[i];
		if (r > borne && r < (borne + 10))
			list_insert(&Ri, r);
	}

	for (i = TAILLE_S-1; i >= 0; i--) {
		int s = S[i];
		if (s > borne && s < (borne + 10))  //Logique
		//if (s > (100-borne) && s < (100 - borne + 10)) //C O
			list_insert(&Si, s);
	}

	printf("%d -> Ri : ", tid);
	list_affiche(Ri);
	printf("%d -> Si : ", tid);
	list_affiche(Si);

	list *inter = Nullptr(list);
	list_intersection(&inter, Ri, Si);

	pthread_mutex_lock(&mutex);
	list_union(&Ti, inter);
	pthread_mutex_unlock(&mutex);

	printf("%d -> Ti : ", tid);
	list_affiche(inter);

	pthread_exit(NULL);
}
/*
 *
 */
int main(int argc, char** argv) {

	Ti = 0;
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
		pthread_join(threads[t], NULL);

	printf("Result Final Ti : ");
	list_affiche(Ti);
	/* Last thing that main() should do */
	pthread_exit(NULL);
	return 0;
}
