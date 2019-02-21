#include<stdio.h>
int main(){
	//VARIABLES TANTO PARA RECOLECCIÓN DE DATOS COMO MANIPULACIÓN
	int tiros[10][2],i,j=1,suma=0,puntajeTotal=0,strikes[10];
	//RECOLECTO LAS SCORES LLENADO LA MATRIZ DE 10 FILAS CON 2 COLUMNAS, SIENDO LA VARIABLE CONTROLADORA I LAS FILAS, Y J LAS COLUMNAS
	for(i=1;i<=10;i++){
	
			printf("%d.- Inserta bolos que tiraste en el primer tiro: ",i);
         	scanf("%d",&tiros[i][j]);
         	if(tiros[i][j]!=10){
         		printf("Inserta bolos que tiraste en el segundo tiro: ");
             	scanf("%d",&tiros[i][j+1]);
                strikes[i]=0;
			 }else if(tiros[i][j]==10){
			 	
			 	strikes[i]=1;
			 }
				
}
   //SUMO LOS CONTENIDOS DE MI MATRIZ VALIDANDO LAS REGLAS DEL SCORING POR FIN
   
   for(i=1;i<=10;i++){
   	if(strikes[i]==1){
   		tiros[i][j]==tiros[i+1][j+1]+tiros[i][j];
   		puntajeTotal=tiros[i][j]+puntajeTotal;
	   }
	   else{
	   	suma=tiros[i][j+1]+tiros[i][j];
	   	puntajeTotal=suma+puntajeTotal;
	   }
	   
   }
	
//IMPRIMO LA PUNTUACIÓN TOTAL DEL USUARIO
   printf("%d",puntajeTotal);
}
