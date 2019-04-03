#include<iostream>
using namespace std;
int main()
{
	int x, i, j, k;
	for ( x = 100; x < 1000; x++)
	{
		i = x / 100;
		j = (x % 100)/10;
		k = x % 10;
		if (x==i*i*i+j*j*j+k*k*k)
		{
			cout << x << endl;
		}
		
	}

return 0;
}