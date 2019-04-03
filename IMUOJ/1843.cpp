#include<iostream>
using namespace std;
int main()
{
	int a[3] = {2,1,6};
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			for (int k = 0; k < 3; k++)
			{
				if ((i != j)&&(j != k)&&(k != i) &&( (a[i] * 100 + a[j] * 10 + a[k]) % 43 == 0)) cout << (a[i] * 100 + a[j] * 10 + a[k]) << endl;
			}
		}
	}
	a[2]=9;
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			for (int k = 0; k < 3; k++)
			{
				if ((i != j) && (j != k) && (k != i) && ((a[i] * 100 + a[j] * 10 + a[k]) % 43 == 0)) cout << (a[i] * 100 + a[j] * 10 + a[k]) << endl;
			}
		}
	}
}