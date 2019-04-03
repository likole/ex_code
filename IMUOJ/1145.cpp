#include<iostream>
using namespace std;
int main()
{
	int n,sum_s=0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		if (i % 2 == 1)sum_s+=i;
	}
	cout << sum_s << endl;
	//cin.get();
	//cin.get();
	return 0;
}