#include<iostream>
using namespace std;
int main()
{
    int* p;
    int m, n;
    cin >> m >> n;
    p = new int[m];
    for (int i = 0; i < m; i++)
    {
        *(p + i) = 0;
    }
    p=(int*)realloc(p,sizeof(int)*(m+n));
    for (int i = m; i < m+n; i++)
    {
        *(p + i) = 1;
    }
    for (int i = 0; i < m+n; i++)
    {
        cout << p[i] << " ";
    }
}