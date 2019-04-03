#include<iostream>;
using namespace std;
int main()
{
	int n, i,j,s=0;
	cin >> n;
	for ( i =1; i <= n; i++)
	{
		s = 0;
		for (j = 1; j < i; j++)
		{
			if ((i%j) == 0)
			{
				s=s+j;
			}
		}
		if (s == i)
		{
			cout << i << " its factors are ";
			for (j = 1; j < i; j++)
			{
				if (i %j == 0)
				{
					cout << j<<" ";
				}
			}
			cout << endl;	
		}

	}





	//cin.get();
	//cin.get();
	return 0;
}