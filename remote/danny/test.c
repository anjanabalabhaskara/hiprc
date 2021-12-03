#include <string.h>
#include <stdio.h>
typedef struct{
	int *emp_id;
	char name[20];
}abc;


int main()
{
	abc x,*p;
	*x.emp_id=10;
	strcpy(x.name,"abc");

	p=&x;

    printf("Displaying:\n");
    printf("Age %d\n", *(p.emp_id));
    printf("Name %s", (*p).name);

    return 0;
}
