#include<iostream>
using namespace std;
int main()
{
	int n,t=1,s=0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		for (int j = 1; j <= i; j++)
		{
			t *= j;
		}
		s += t;
		t = 1;
	}
	cout << s << endl;
	//cin.get();
	//cin.get();
	return 0;
}