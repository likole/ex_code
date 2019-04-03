#include<iostream>
using namespace std;
int main()
{
	for (int i = 100; i <= 200; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag = 0;
		}
		if (flag)cout << i << " ";
	}
	cin.get(); cin.get();
	return 0;
}