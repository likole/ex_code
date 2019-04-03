#include<iostream>;
using namespace std;
int gys(int,int);
int gbs(int,int);
int main()
{
	int m, n;
	cin >> m >> n;
	cout << gys(m,n) << " " << gbs(m,n) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int gys(int m, int n)
{
	int p;
	int x = m > n ? n : m;
	for (int i = 1; i <= x; i++)
	{
		if ((m%i == 0) && (n%i == 0))
		{
			p = i;
		}
	}
	return p;
}
int gbs(int m, int n)
{
	int q;
	int x = m > n ? m : n;
	for (int j = x; j <= (m*n); j++)
	{
		if ((j%m == 0) && (j%n == 0))
		{
			q = j;
			break;
		}
	}
	return q;
}