#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[])
{
    char *name = NULL;
    int read;
    unsigned int len;
    read = getline(&name, &len, stdin);

    if (-1 != read) {
        printf("The Force is strong with ");
        puts(name);
    } else {
        free(name);
    }

    free(name);
    return 0;
}