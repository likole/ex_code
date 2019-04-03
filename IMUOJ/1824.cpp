#include<iostream>
using namespace std;
class Counter
{
	int n;
public:
	Counter(int x) { n = x; }
	void operator + (int)
	{
		n++;
	}
	void show()
	{
		cout << n << endl;
	}
};
int main()
{
	int n,m;
	cin >> n>>m;
	class Counter c(n);
	for (int i = 0; i < m; i++)
	{
		c + 0 ;
	}
	c.show();
}