#include<iostream>
using namespace std;
int isPrime(int n)
{
	if (n % 6 != 1 && n % 6 != 5) return 0;
	for (int i = 5; i*i <n ; i+=6)
	{
		if (n%i == 0 || n % (i + 2) == 0)return 0;
	}
	return 1;
}
int main()
{
	int year1[13] = { 0,31,29,31,30,31,30,31,31,30,31,30,31 };
	int year2[13]= { 0,31,28,31,30,31,30,31,31,30,31,30,31 };
	for (int i = 1; i <= 12; i++)
	{
		for (int j = 1; j <= year1[i]; j++)
		{
			int m = 19880000 + i * 100 +j;
			if (isPrime(m))cout << m << endl;
		}
	}
	for (int i = 1; i <= 12; i++)
	{
		for (int j = 1; j <= year2[i]; j++)
		{
			int m = 19890000 + i * 100 + j;
			if (isPrime(m))cout << m << endl;
		}
	}
}
