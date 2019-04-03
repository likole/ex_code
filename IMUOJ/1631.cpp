#include<iostream>
using namespace std;
int main()
{
	int *p,n,m;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	cin >> m;
	if (m < p[0])cout << m<<" ";
	cout << p[0];
	for (int i = 1; i < n; i++)
	{
		if (p[i - 1] <= m&&p[i]>m)cout << " "<<m;
		cout << " "<<p[i];
	}
	if (m >= p[n-1])cout <<" "<< m ;
}