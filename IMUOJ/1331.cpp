#include<iostream>
using namespace std;
int buff[1000001];
int f(int n)
{
	int t = n;
	int count = 1;
	while (n != 1)
	{
		if (buff[n] != 0)
		{
			return count + buff[n];
		}
		else
		{
			if (n % 2)
				n = n * 3 + 1;
			else
				n /= 2;
			++count;
		}
	}
	buff[t] = count-1;
	return count;
}
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		int max_num = 0;
		int a=m<n?m:n;
		int b=m>n?m:n;
		for (int i = a; i <= b; i++)
		{
			if (f(i) > max_num) max_num = f(i);
		}
		cout << m << " " << n << " " << max_num << endl;
	}
}
