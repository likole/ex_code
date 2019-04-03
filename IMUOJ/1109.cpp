#include<iostream>
using namespace std;
int main()
{
	int a[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> a[i];
	}
	for (int e = 3; e >= 0; e--)
	{
		for (int i = 0; i < 4; i++)
		{
			for (int j = 0; j < 4; j++)
			{
				for (int k = 0; k < 4; k++)
				{
					if ((i != j)&&(j != k)&&(k != i)&&(i!=e)&&(j!=e)&&(k!=e))cout << a[i] << " " << a[j] << " " << a[k] << endl;
				}
			}
		}
	}
	return 0;
}