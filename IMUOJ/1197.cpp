#include<iostream>
using namespace std;
int reverse(int n)
{
	int ans = 0;
	while (n)
	{
		ans = ans * 10 + n % 10;
		n /= 10;
	}
	return ans;
}
int main()
{
	int n, l;
	cin >> l;
	for (int i = 0; i < l; i++)
	{
		cin >> n;
		int count = 0;
		int t = reverse(n);
		while (n != t)
		{
			if (count == 9)
			{
				count = 0;
				break;
			}
			n += t;
			count++;
			t = reverse(n);
		}
		cout << count << endl;
	}
}