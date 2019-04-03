#include<iostream>
using namespace std;
int main()
{
	for (int i = 1; i <= 40; i++)
	{
		int tmp = 1;
		for (int j = 1; j <= i; j++)
		{
			if (40 % j == 0 && i%j == 0) tmp = j;
		}
		if (tmp == 1) cout << i << "/40,";
	}
	//cin.get();
	//cin.get();
	return 0;
}