#include<iostream>
using namespace std;
int create_num(int);
int main()
{
	int n,ans=0;
	cin >> n;
	for (int p= 0; p < n; p++)
	{
		ans += create_num(p + 1);
	}
	cout << ans << endl;
	cin.get();
	cin.get();
	return 0;
}
int create_num(int leng)
{
	int sum=0,factor;
	for (int i = 0; i < leng; i++)
	{
		factor = 2;
		for (int j = 0; j < i; j++)
		{
			factor *= 10;
		}
		sum += factor;
	}
	return sum;
}