#include<iostream>
using namespace std;
int main()
{
	int ans[55];
	ans[0] = 1;
	ans[1] = 1;
	ans[2] = 2;
	for (int i = 3; i < 55; i++)
	{
		ans[i] = ans[i - 3] + ans[i - 1] + 1;
	}
	int n;
	cin >> n;
	cout << ans[n - 1]<<endl;
}