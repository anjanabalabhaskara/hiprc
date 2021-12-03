#include<string.h>
#include<stdio.h>
char k1[50],k2[50];
char * vn(int n){
	if(n==0)
		return("{}");
	//if(n==1)
	//	return("{{}}");
	else{
		strcat(k2,vn(n-1));
		strcat(k1,",{");
		strcat(k1,k2);
		strcat(k1,",}");
		strcat(k2,k1);
		return(k2);
	}
}

void main(){
	
	int n;
	printf("%s ",vn(2));

}
