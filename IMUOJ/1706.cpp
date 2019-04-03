#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int ans1=0, ans2=1;
	for (int i = 1; i <= n; i++)
	{
		ans1 += i;
	}
	for (int i = 1; i <= n; i++)
	{
		ans2 *= i;
	}
	cout << ans1 << endl << ans2 << endl;
	//cin.get(); cin.get();
	return 0;
}