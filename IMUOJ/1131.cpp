#include<iostream>
using namespace std;
int generate_num(int, int);
int main()
{
	int a, n,sum=0;
	cin >> a >> n;
	for (int i = 1; i <= n; i++)
	{
		sum += generate_num(a, i);
	}
	cout << sum<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
int generate_num(int fact, int num)
{
	int ans=fact;
	for (int i = 1; i < num; i++)
	{
		int tmp = 1;
		for (int j = 0; j < i; j++)
		{
			tmp *= 10;
		}
		ans += tmp*fact;
	}
	return ans;
}