#include<iostream>;
using namespace std;
int main()
{
	int m, n,x,p,q;
	cin >> m >> n;
	x = m > n ? m : n;
	for (int i = 1; i < x; i++)
	{
		if ((m%i==0)&&(n%i==0))
		{
			p = i;
		}
	}
	for (int j = x; j <= (m*n); j++)
	{
		if ((j%m == 0) && (j%n == 0))
		{
			q = j;
			break;
		}
	}
	cout << p <<" "<<q<< endl;
	//cin.get();
	//cin.get();
	return 0;
}