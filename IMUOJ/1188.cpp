#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int ans[100];
	int ori;
	while (cin >> ori)
	{
		int index = 0;
		int n = abs(ori);
		while (n > 0)
		{
			ans[index++] = n % 2;
			n /= 2;
		}
		cout << ori << "-->" << (ori < 0 ? "-" : "");
		for (int i = index - 1; i >= 0; i--)
		{
			cout << ans[i];
		}
		cout << (ori==0?"0":"")<<endl;
	}
}