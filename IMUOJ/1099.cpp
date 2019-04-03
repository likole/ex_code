#include<iostream>
using namespace std;
int main()
{
	for (int i = 1; i <= 1000; i++)
	{
		int sum = 0;
		if (i == 1)sum++;
		for (int j = 1; j < i; j++)
		{
			if (i%j == 0)sum+=j;
		}
		if (sum == i)
		{
			cout << i << "=1";
			for (int k = 2; k < i; k++)
			{
				if (i%k == 0) cout << "+" << k;
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}