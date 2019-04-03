#include<iostream>
using namespace std;
int main()
{
	int next[4][2] = { 0,1,1,-1,1,0,-1,1 };
	int martix[10][10];
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			martix[i][j] = 0;
		}
	}
	int n;
	int step = 0, i = 0, j = 0;
	cin >> n;
	int tmp = n;
	martix[0][0] = n;
	while (n > 0)
	{
		if (step % 4 == 0)
		{
			i += next[0][0];
			j += next[0][1];
			n--;
			martix[i][j] = n;
			step++;
		}
		else if (step % 4 == 1)
		{
			while (j > 0)
			{
				i += next[1][0];
				j += next[1][1];
				n--;
				martix[i][j] = n;
				if (n == 1)break;
			}
			step++;
		}
		else if (step % 4 == 2)
		{
			i += next[2][0];
			j += next[2][1];
			n--;
			martix[i][j] = n;
			step++;
		}
		else if (step % 4 == 3)
		{
			while (i > 0)
			{
				i += next[3][0];
				j += next[3][1];
				n--;
				martix[i][j] = n;
				if (n == 1)break;
			}
			step++;
		}
	}
	int count = 0;
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			if (martix[i][j] != 0)
			{
				cout << martix[i][j] << " ";
				count++;
			}
		}
		if (count < tmp)cout << endl;
	}
}