#include<iostream>
#include<cmath>
using namespace std;
int fact(int);
int main()
{
	for (int i = 1; i < 10000000; i++)
	{

		int sum = 0;
		int x = 0;
		int temp = i;
		while (temp>0)
		{
			temp /= 10;
			x++;
		}
		for (int j = 0; j < x; j++)
		{
			sum += fact((i / (int)pow(10, j)) % 10);
		}
		if (sum == i)
		{
			cout << i << " ";
		}
	}
}
int fact(int a)
{
	int y = 1;
	for (int i = 1; i <= a ; i++)
	{
		y *= i;
	}
	return y;
}