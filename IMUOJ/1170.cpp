#include<iostream>
using namespace std;
int main()
{
	int book[21][191] = { 0 };
	for (int i = 1; i < 21; i++)
	{
		book[i][0] = 1;
	}
	for (int i = 2; i < 21; i++)
	{
		for (int free = 1; free < i; free++)
		{
			for (int j = 0; j < 191; j++)
			{
				if (book[free][j] == 1)book[i][(i - free)*free + j] = 1;
			}
		}
	}
	int n;
	while (cin >> n)
	{
		cout << 0;
		for (int i = 1; i < 191; i++)
		{
			if (book[n][i] == 1)cout << " " << i;
		}
		cout << endl;
	}
}