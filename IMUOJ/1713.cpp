#include<iostream>
using namespace std;
int main()
{
	int n, count_correct = 0, count_minus = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int a, b, c;
		char s, t;
		cin >> a >> s >> b >> t >> c;
		if (s == '-')
		{
			count_minus++;
			if (a - b == c)count_correct++;
		}
		else
		{
			if (a + b == c) count_correct++;
		}
	}
	cout << count_correct << " " << count_minus;
}