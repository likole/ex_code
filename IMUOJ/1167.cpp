#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int ans = 1;
		for (int i = 1; i < n; i++)
		{
			ans = (ans + 1) * 2;
		}
		cout << ans<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}