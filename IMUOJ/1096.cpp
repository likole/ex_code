#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	for (int i = 2; i <=x; i++)
	{
		if (x%i==0)
		{
			int n = 1;
			for (int j = 1; j <i; j++)
			{
				if (i%j == 0) n = j;
			}
			if (n == 1) cout << i << " ";
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}