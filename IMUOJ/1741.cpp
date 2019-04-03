#include<iostream>
#include<string>
using namespace std;
int main()
{
	string pre = "0123456789AB";
	int x;
	cin >> x;
	int ans[200], index=0;
	while (x > 0)
	{
		ans[index++] = x % 12;
		x /= 12;
	}
	for (int i = index - 1; i >= 0; i--)
	{
		cout << pre[ans[i]];
	}
}
